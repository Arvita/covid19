<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Contracts\Auth\Guard,
	Redirect,
	App\Http\Controllers\Controller,
	Illuminate\Http\Request,
	App\Model\User,
	App\Model\Status,
	Validator,
    DB,
	Yajra\Datatables\Datatables;

class UserController extends Controller
{
	private $user;
 // public function __construct(Guard $auth)
	// {
	// 	// if(! in_array($auth->user()->status, $this->guard)) {Redirect::to('/404')->send();}
	//
	// 	$this->user = 'Backend';
	// }

	public function index(Guard $auth)
	{
		$m_ms = 'active open';
        $sm_ms_user = 'active open';

		$user = $auth->user();
		return view('Backend.user.index', compact('sm_ms_user','m_ms','user'));
	}

	public function create()
	{
		$user = null;
		$status = Status::select('id', 'status')->get();
	    return view('Backend.user.create',compact('user','status'));
	}

	public function data()
	{
		// $user = User::select(DB::raw('(@row:=@row+1) AS ROW, id, name, username'));


	$user = \DB::table(\DB::raw('Users, (SELECT @row := 0) r'));
	$user = $user->select(
	                            \DB::raw('@row := @row + 1 AS row'),
	                            'id',
								'name',
	                            'username',
	                            'id_status',
								'updated_at'
	                        );

		return Datatables::of($user)
					  ->addColumn('detail', function ($mn) {
							  return '<button type="button" data-url="'.url('user/'.$mn->id).'/edit" class="ajax_modal btn btn-xs btn-primary tooltips" data-placement="top" data-original-title="Edit User" ><i class="fa fa-edit"></i></button> '.
									 '<button type="button" data-url="'.url('user/'.$mn->id).'/conf" class="ajax_modal_popup btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Hapus User" ><i class="fa fa-trash-o"></i></button>';
					  })
					  ->make(true);
	}

	public function edit($id)
	{
		$user=User::find($id);
		$status = Status::select('id', 'status')->get();
		return ($user)? view('Backend.user.create', compact('user','status')) : $this->showModalError();
	}

	public function update($id, Request $request)
	{
		if ($request->ajax() || $request->wantsJson()) {
			$validator = Validator::make($request->all(), [
				'name' => 'required|min:2',
				'username' => 'required',
				'id_status' => 'required'
			]);

			if ($validator->fails()) return response()->json(['stat' => false, 'msg' => $this->getMessage('update.failed')]);

			$user = User::find($id);
			if(! $user) return $this->showModalError();

			$user->name = strip_tags($request->input('name'));
			$user->username = $request->input('username');
			if ($request->input('passwordupdate')!=NULL) {
				$user->password = bcrypt($request->input('passwordupdate'));
			}
			$user->id_status = strip_tags($request->input('id_status'));
			$user->save();
			return response()->json(['stat' => true, 'msg' => $this->getMessage('update.success')]);
		}
		return redirect('/');
	}

	public function confirm($id)
	{
		$user  = User::find($id);
		return ($user)? view('Backend.user.confirm', compact('user')) : $this->showModalError();
	}

	public function destroy(Request $request)
	{
	try {
			User::where('id', '=', $request->input('id'))->delete();
			return response()->json(['stat' => true, 'msg' => $this->getMessage('delete.success')]);
		} catch (\Illuminate\Database\QueryException $e) {
		return response()->json(['stat' => false, 'msg' => $this->getMessage('delete.prevent')]);
		}
	}

	public function store(Request $request)
	{
		if ($request->ajax() || $request->wantsJson()) {
		$validator = Validator::make($request->all(), [
			'name' => 'required|min:2',
			'username' => 'required',
			'password' => 'required|min:6',
			'id_status' => 'required'

		]);

		if ($validator->fails()) return response()->json(['stat' => false, 'msg' => $this->getMessage('insert.failed')]);

		$user = new User;
		$user->name = strip_tags($request->input('name'));
		$user->username = $request->input('username');
		$user->password = bcrypt($request->input('password'));
		$user->id_status = strip_tags($request->input('id_status'));
		$user->save();

		return response()->json(['stat' => true, 'msg' => $this->getMessage('insert.success')]);
		}
		return redirect('/');
	}
}
