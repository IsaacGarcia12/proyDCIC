public function store(){
	$data = Request::all();

	$rules=array(

	'nombre' => 'required',
	'apPat'  => 'required',
	'apMat'  => 'required',
	'email'  => 'requierd',
	'password' => 'required',

	);

	$va = Validaotr::make($data, $rules);

	if($va -> fails()){
		return redirect()-back()
			->withErrors($va -> errors())
			->withInput(Request::exe)
	}
}