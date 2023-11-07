@extends('layouts.web')

@section('content')
<div class="bg-white shadow-lg rounded-lg px-10 py-20 mt-2 mx-auto">
<div class="text-center py-10">
  <div class="text-xl font-medium text-purple-600 font-semibold">Información Del Empleado</div>
</div>
        <form>
            <div class="">
                <div class="flex flex-col items-center">
                  <img src="{{ $profileEmp->photo }}" class="rounded-md mx-auto py-2 w-1/10">
                  <button type="button"
                      class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cambiar</button>
              </div>
            </div>
            <div class="space-y-12 ">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Perfil</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">información del perfil, por favor tener cuidado con lo
                        que se comparte.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class=" sm:col-span-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Usuario en el
                                sistema</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <span
                                        class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">{{ $profileEmp->names }}</span>
                                    <input type="text" name="username" id="username" autocomplete="username"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="/ {{$profileEmp->employeeId}}">
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" disabled>
                                    <livewire:job-title-list>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Descripción del
                                Cargo</label>
                            <div class="mt-2">
                                <textarea id="about" name="about" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>{{'jobTitle->jobTitleDesc'}}</textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Información referente al cargo.</p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion Personal</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Diligenciamiento de la ruta demográfica del empleado.
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name"
                                class="block text-sm font-medium leading-6 text-gray-900">Nombres</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled value="{{$profileEmp->names}}">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name"
                                class="block text-sm font-medium leading-6 text-gray-900">Apellidos</label>
                            <div class="mt-2">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled value="{{$profileEmp->lastNames}}">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            </label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disable value="{{$profileEmp->email}}">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Pais</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" disabled>
                                    <option value="{{$profileEmp->bornCountry}}" selected>{{$profileEmp->bornCountry}}</option>
                                    <option>Colombia</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" disabled>
                                    <option value="{{$profileEmp->bornCity}}" selected>Ciudad 1</option>
                                    <option>Ciudad 2</option>
                                    <option>Ciudad 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="street-address"
                                class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                            <div class="mt-2">
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled value="{{$profileEmp->addres}}">
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-900/10 pb-12 py-2">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Configuraciones del Cargo</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Realizar las configuraciones con respecto a la relacion del cargo</p>

                    <div class="mt-4 space-y-10">
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Etiquetas</legend>
                            <div class="mt-6 space-y-6">
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="comments" name="comments" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="comments" class="font-medium text-gray-900">Jefe</label>
                                        <p class="text-gray-500">Seleccionar si el cargo relacionado al empleado es de
                                            Jefe.</p>
                                    </div>
                                </div>
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="candidates" name="candidates" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="candidates" class="font-medium text-gray-900">Presidente</label>
                                        <p class="text-gray-500">Seleccionar si el cargo relacionado es Presidente.</p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-center gap-x-6 py-2">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">modificar</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" disabled>Guardar</button>
                <button type="submit"
                    class="rounded-md bg-white-600 px-3 py-2 text-sm font-semibold text-indigo shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" disabled>Guardar</button>
            </div>
        </form>
  </div> 
@endsection
