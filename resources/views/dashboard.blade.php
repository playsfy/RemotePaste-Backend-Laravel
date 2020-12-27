<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

    <script type="text/javascript">

      var connection;

      connect();

      function connect() {

        let HOST = location.origin.replace(/^http/, 'ws')
        let connection = new WebSocket('ws://clipup.herokuapp.com');

        connection.onopen = () => {
          addText('connected');
          console.log('connected');
        };

        connection.onclose = error => {
          addText('Socket is closed.');
          console.log('Socket is closed. Reconnect will be attempted in 1 second.', error.reason);
          setTimeout(function() {
            connect();
            addText('Reconnecting');
          }, 1000);
        };

        connection.onerror = error => {
          console.error('failed to connect', error);
        };

        connection.onmessage = event => {
          console.log('received', event.data.toString());
          addText(event.data.toString());     
        };

        function addText(text) {
            var current = new Date();
            document.getElementById("log").value += '\n' + current.toLocaleString() + '\t' + text;
            document.getElementById("log").scrollTop = document.getElementById("log").scrollHeight;
        }
      }
    </script>
