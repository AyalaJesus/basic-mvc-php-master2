class  Pedido{
  constructor(nombre,domicilio,telefono){
    this._nombre = nombre;
    this._domicilio = domicilio;
    this._telefono = telefono;
  }
  get nombre(){
    return this._nombre;
  }
  set nombre(nombre){
    this._nombre=nombre;
  }
  
  get domicilio(){
    return this._domicilio;
  }
  set domicilio(domicilio){
    this._domicilio=domicilio;
  }
  
  get telefono(){
    return this._telefono;
  }
  set telefono(telefono){
    this._telefono=telefono;
  }
}
