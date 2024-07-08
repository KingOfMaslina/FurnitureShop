<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Измнение блога') }}
            </h2>
            <a href="{{ route('about.index') }}" class="px-2 py-2 bg-gray-800 text-white font-medium rounded-sm">{{ __('Вернуться назад') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form method="PUT" :default="$about" action="{{ route('about.update', $about->id) }}">
                        <x-splade-input name="title" label="Заголовок" />
                        <x-splade-textarea name="text" label="Текст" autosize />
                        <x-splade-submit class="mt-4 bg-violet-700 text-white" label="Сохранить" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

