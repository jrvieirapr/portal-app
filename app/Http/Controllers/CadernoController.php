<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreCadernoRequest;
    use App\Http\Requests\UpdateCadernoRequest;
    use App\Models\Caderno;

    class CadernoController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            //Carregue os dados dos banco
            //select * from cadernos
            $cadernos = Caderno::all();
            // Fazer o response pro usuario
            return view('admin.cadernos.index', compact('cadernos'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //Retornar a pagina de criação
            return view('admin.cadernos.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(StoreCadernoRequest $request)
        {
            //Debug
            // dd($request);

        }

        /**
         * Display the specified resource.
         */
        public function show(Caderno $caderno)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Caderno $caderno)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(UpdateCadernoRequest $request, Caderno $caderno)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Caderno $caderno)
        {
            //
        }
    }