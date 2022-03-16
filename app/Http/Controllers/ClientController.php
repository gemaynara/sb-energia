<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Distributor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('user')->get();
        return view('pages.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distributors = Distributor::where('active', 1)->get();
        $states = DB::table('states')->orderBy('state')->get();
        return view('pages.clients.create', compact('distributors', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('_token', '_method');

            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
            $data['user_id'] = $user->id;

            Client::create($data);
            DB::commit();
            return redirect()->route('clients.index')->with('success', 'Cliente registrado com sucesso!');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::info('Ocorreu um erro ao registrar cliente:' . $e->getMessage());
            return redirect()->route('clients.index')->with('error', 'Ocorreu um erro ao registrar cliente!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $client = Client::with('user')->find($id);
        $distributors = Distributor::where('active', 1)->get();
        $states = DB::table('states')->orderBy('state')->get();
        return view('pages.clients.edit', compact('client', 'distributors', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $client_id, $user_id)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('_token', '_method');

            User::where('id', $user_id)->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($request->password)
            ]);
            Client::where('id', $client_id)->update([
                'distributor_id' => $data['distributor_id'],
                'cpf_cnpj' => $data['cpf_cnpj'],
                'installation_code' => $data['installation_code'],
                'birth' => $data['birth'],
                'auto_billing' => $data['auto_billing'],
                'discount' => $data['discount'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'zip_code' => $data['zip_code'],
                'number' => $data['number'],
                'complement' => $data['complement'],
                'district' => $data['district'],
                'city' => $data['city'],
                'state' => $data['state'],
            ]);
            DB::commit();
            return redirect()->route('clients.index')->with('success', 'Cliente alterado com sucesso!');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::info('Ocorreu um erro ao alterar cliente:' . $e->getMessage());
            return redirect()->route('clients.index')->with('error', 'Ocorreu um erro ao alterar cliente!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
