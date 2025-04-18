<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customer Page') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <div>
                <div>
                    <table>
                        <caption>Your Orders</caption>
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->item }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <a href="{{ route('customer.edit', compact('order')) }}">edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('customer.destroy', compact('order')) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('customer.create') }}">
                        <button>Add Order</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
