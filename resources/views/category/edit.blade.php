<x-app-layout>
    <x-slot name="header">

        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование категорий') }}
            </h2>
            <a href="{{ route('category.index') }}" class="px-2 py-2 bg-blue-500 font-medium rounded-sm">{{ __('Вернуться назад') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form method="PUT" :default="$category" action="{{ route('category.update',$category->id) }}">
                        <x-splade-input name="name" label="Название категории" placeholder="Мебель"/>
                        <x-splade-file name="image" label="Изображение"/>
                        <img class ="h-28 mt-4" src="{{Storage::url($category->image)}}" alt="">
                        <x-splade-submit class="mt-4" label="Редактировать"/>

                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


