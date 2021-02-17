@extends('layout')
@section('content')
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Crear Pronostico</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Cree diferentes pronosticos aqui
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{route('forecast.store')}}" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                                    <input type="text" name="descripcion" id="descripcion" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ciudad" class="block text-sm font-medium text-gray-700">Ciudad</label>
                                    <select id="ciudad" name="ciudad" autocomplete="ciudad" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
                                    <select id="tipo" name="tipo" autocomplete="tipo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="temperatura_maxima" class="block text-sm font-medium text-gray-700">Temperatura maxima</label>
                                    <input type="text" name="temperatura_maxima" id="temperatura_maxima" autocomplete="temperatura_maxima" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6">
                                    <label for="temperatura_minima" class="block text-sm font-medium text-gray-700">Temperatura_minima</label>
                                    <input type="text" name="temperatura_minima" id="temperatura_minima" autocomplete="temperatura_minima" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="posibilidad_de_lluvia" class="block text-sm font-medium text-gray-700">Posibilidad de lluvia</label>
                                    <input type="text" name="posibilidad_de_lluvia" id="posibilidad_de_lluvia" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
