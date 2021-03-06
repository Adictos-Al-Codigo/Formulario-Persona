
<div class="row">
    <div class="col-12" style="position: relative; top: 70px">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Registro de Personas</h5>
            </div>
            @if($InsertOrUpdate)
            <form action="" wire:submit.prevent="guardar">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label>Buscar a una Persona en Especifico...</label>
                                <input type="search" class="form-control" placeholder="Ingrese sus Nombres" wire:model="buscar">
                                <label>Roles</label>
                                <select class="form-control select2" data-bs-toggle="select2" wire:model="id_tipo" style="cursor: pointer ">
                                    <option>Selecciona</option>
                                    @foreach ($t as $item)
                                       <option value="{{$item->id}}">{{$item->tipo}}</option>
                                   @endforeach                         
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="form-control" wire:model="nom" >
                                @error('nom') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Apellido</label>
                                <input type="text" class="form-control" wire:model="ape" >
                                @error('ape') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="text" class="form-control" wire:model="telf">
                                @error('telf') <span class="error">{{ $message }}</span> @enderror
                            </div>  
                            <br> 
                        </div>
    
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label>Especialidad</label>
                                <select class="form-control select2" data-bs-toggle="select2" wire:model="id_especialidad" style="cursor: pointer ">
                                    <option>Selecciona</option>
                                    @foreach ($s as $item2)
                                       <option value="{{$item2->id}}">{{$item2->especialidad}}</option>
                                   @endforeach                         
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Cedula</label>
                                <input type="text" class="form-control" wire:model="CI">
                                @error('CI') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Direccion</label>
                                <input type="text" class="form-control" wire:model="dir"> 
                                @error('dir') <span class="error">{{ $message }}</span> @enderror                         
                            </div>
                        </div>
                    </div>
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            @else
            <form action="" wire:submit.prevent="update">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label>Buscar a una Persona en Especifico...</label>
                                <input type="search" class="form-control" placeholder="Ingrese sus Nombres" wire:model="buscar">
                                <label>Roles</label>
                                <select class="form-control select2" data-bs-toggle="select2" wire:model="id_tipo" style="cursor: pointer ">
                                    <option>Selecciona</option>
                                    @foreach ($t as $item)
                                       <option value="{{$item->id}}">{{$item->tipo}}</option>
                                   @endforeach                         
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="form-control" wire:model="nom" >
                                @error('nom') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Apellido</label>
                                <input type="text" class="form-control" wire:model="ape" >
                                @error('ape') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="text" class="form-control" wire:model="telf">
                                @error('telf') <span class="error">{{ $message }}</span> @enderror
                            </div>  
                            <br> 
                        </div>
    
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label>Especialidad</label>
                                <select class="form-control select2" data-bs-toggle="select2" wire:model="id_especialidad" style="cursor: pointer ">
                                    <option>Selecciona</option>
                                    @foreach ($s as $item2)
                                       <option value="{{$item2->id}}">{{$item2->especialidad}}</option>
                                   @endforeach                         
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Cedula</label>
                                <input type="text" class="form-control" wire:model="CI">
                                @error('CI') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Direccion</label>
                                <input type="text" class="form-control" wire:model="dir"> 
                                @error('dir') <span class="error">{{ $message }}</span> @enderror                         
                            </div>
                        </div>
                    </div>
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message2') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
            @endif
        </div>
    </div>
    <div class="row justify-content-center;" style="position: relative; top: 40px">
        <div class="col-12" >
        <div class="card">
            <div class="card-body">
                <table id="datatables-reponsive" class="table table-striped" style="width:100%" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Tipo</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p as $item)
                        <tr>
                            <td>
                               {{$item->id}}
                            </td>
                            <td>
                                {{$item->nom}}
                            </td>
                            <td>
                                {{$item->ape}}
                            </td>
                            <td>
                                {{$item->CI}}
                            </td>
                            <td>
                                {{$item->dir}}
                            </td>
                            <td>
                                {{$item->telf}}
                            </td>
                            <td>
                                {{$item->id_tipo}}
                            </td>
                            <td>
                                {{$item->id_especialidad}}
                            </td>
                            <td class="table-action">
                                
                                <a ><i class="align-middle fas fa-fw fa-pen" wire:click="edit({{ $item->id }})" style="cursor: pointer "></i></i></a>
                                <a ><i class="align-middle fas fa-fw fa-trash " wire:click="destroyL({{$item->id}})" style="cursor: pointer "></i></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p->links() }}
            </div>
        </div>
        </div>
        </div>
</div>
