<x-app-layout>

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form id="form-servicio" action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Creación de
                        nuevo evento</h2>
                </header>

                <div class="p-3">
                    <div class="rounded shadow-lg p-4 px-4 ">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="nombre">Titulo del Evento</label>
                                <div class="relative mb-2  mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="text" id="nombre" name="nombre" value=""
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Titulo">
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="fecha">Fecha</label>
                                <div class="relative mb-2 mt-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <input type="date" rows="2" id="fecha" name="fecha" value=""
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Fecha"/>
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="hora">Hora</label>
                                <div class="relative mb-2 mt-2">

                                    <input type="time" rows="2" id="hora" name="hora" value=""
                                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                        placeholder="Hora"/>
                                </div>
                            </div>

                            <!-- agregar descripcione -->
                            <!-- <div class=""> -->
                                <!-- 1 -->
                                <!-- <div class="md:col-span-6">

                                </div> -->
                                <div class="md:col-span-5">
                                    <label for="lugar">Lugar</label>
                                    <div class="relative mb-2  mt-2">

                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </div>

                                        <input type="text" id="lugar" name="lugar" value=""
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Lugar">
                                    </div>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="modalidad">Modalidad</label>
                                    <div class="relative mb-2 mt-2">

                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </div>
                                        <select id="modalidad" name="modalidad" class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="" disabled selected>Seleccione una modalidad</option>
                                            <option value="Presencial" {{ old('modalidad') == 'Presencial' ? 'selected' : '' }}>Presencial</option>
                                            <option value="Virtual" {{ old('modalidad') == 'Virtual' ? 'selected' : '' }}>Virtual</option>
                                            <option value="Presencial y Virtual" {{ old('modalidad') == 'Presencial y Virtual' ? 'selected' : '' }}>Presencial y Virtual</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 2 -->

                                <div class="md:col-span-5">
                                    <label for="link">URL del evento</label>
                                    <div class="relative mb-2  mt-2">

                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </div>

                                        <input type="url" id="link" name="link" value=""
                                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="URL del video">
                                    </div>
                                </div>

                            <!-- </div> -->

                            
                            <!-- -------------------- -->
                            <div class="md:col-span-5 text-right mt-6">
                                <div class="inline-flex items-end">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Guardar
                                        evento</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    @vite(['resources/js/app.js']) {{-- Incluye tu app.js si usas Vite --}}

    <script>


        $('document').ready(function() {

                tinymce.init({
                    selector: 'textarea#description',
                    height: 500,
                    plugins: [
                        'advlist', 'autolink', 'lists', 'link', 'charmap', 'preview',
                        'searchreplace', 'visualblocks', 'code', 'fullscreen',
                        'insertdatetime', 'table'
                    ],
                    toolbar: 'undo redo | blocks | ' +
                        'bold italic backcolor | alignleft aligncenter ' +
                        'alignright alignjustify | bullist numlist outdent indent | ' +
                        'removeformat | help',
                    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px;}',
                    license_key: 'gpl'
                });
            

            
    
        })
    </script>
    <!-- Script para manejar el envío del formulario con AJAX -->
    <script>

    </script>

</x-app-layout>