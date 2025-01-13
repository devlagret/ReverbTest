<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                  <button id="send-notif" class="btn btn-primary m-1 h-2 btn-sm" type="button">Send Notif</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $(function () {
            $('#send-notif').on('click',function () {
                alert('Send Notif');
                $.ajax({
                    url: '{{route("broadcast")}}',
                    type: 'get',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
    @endpush
</x-app-layout>
