<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Notifications') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <div>
                <div>
                    <ul>
                        @foreach ($notifications as $notification)
                            <li>
                                {{ $notification->data['message'] }} 
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
