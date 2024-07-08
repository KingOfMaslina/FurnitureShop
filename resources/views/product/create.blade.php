<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Товары') }}
            </h2>
            <a href="{{ route('product.index') }}" class="px-2 py-2 bg-blue-500 font-medium rounded-sm">{{ __('Вернуться назад') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form action="{{ route('product.store') }}">
                        <x-splade-select name="category_id" label="Выберите категорию" :options="$categories" />
                        <x-splade-input name="name" label="Название продукта" placeholder="Яблоки"/>
                        <x-splade-textarea name="description" label="Описание продукта" autosize />
                        <x-splade-input name="price" label="Цена" placeholder="200.00"/>
                        <x-splade-input name="sale" label="Скидка" placeholder="100.00"/>
                        <x-splade-input name="collection" label="Коллекция" />
                        <x-splade-input name="manufacturer" label="Производитель" />
                        <x-splade-input name="guarantee" label="Гарантия" />
                        <x-splade-input name="expire" label="Срок службы" />
                        <x-splade-input name="size" label="Размеры" />
                        <x-splade-input name="sheathing" label="Обшивка" />
                        <x-splade-input name="color" label="Цвет" />
                        <x-splade-file name="image" label="Изображение"/>
                        <x-splade-submit class="mt-4 bg-violet-700 text-white" label="Сохранить" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
