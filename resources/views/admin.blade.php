<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Admin Page') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <div>
                <div>
                    <a href="{{ route('view') }}">View All Orders</a>    
                </div>
                @foreach ($logs as $log)
                    <div>
                        <p>{{$log->message}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
