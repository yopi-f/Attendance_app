<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ダッシュボード') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("アカウント登録に成功しました。") }}
                </div>
                <a href="{{ route('attendance.index') }}" class="text-blue-500 hover:underline">
                    {{ __('TOPページへ') }}
                </a>    
            </div>
        </div>
    </div>
</x-app-layout>
