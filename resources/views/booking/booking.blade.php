{{-- <x-app-layout>
    <div class="py-10">
        <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('dashboard') }}" class="ms-1">
                <x-primary-button>
                    {{ __('Kembali') }}
                </x-primary-button>
            </a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    @foreach ($dataBooking as $dtb )

                    @endforeach
                    <form action="{{ route('booking/booking') }}" method="GET">
                        @csrf
                        <input type="hidden" name="lapangan_id" value="{{ $dtb  }}">
                        <div class="mb-4">
                            <label for="lapangan" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Tipe Lapangan</label>
                            <input type="text" name="lapangan" id="lapangan" value="{{ $dtb->nama_jenis }}" class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="lapangan" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Harga Lapangan(Jam)</label>
                            <input type="text" name="lapangan" id="lapangan" value="{{ $dtb->harga_sewa }}" class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" required>
                        </div>
                        <div class="mb-4">
                            <label for="lama_main" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Lama Main (Jam)</label>
                            <input type="number" name="lama_main" id="lama_main" class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" required min="1" step="1">
                        </div>
                        <div class="mb-4">
                            <label for="total_harga" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Total Harga</label>
                            <input type="text" name="total_harga" id="total_harga" class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" readonly>
                        </div>
                        <div class="py-12 flex justify-end">
                            <a href="{{ route('penyewaan/index') }}" type="submit" class="ms-1">
                                <x-primary-button>
                                    {{ __('Booking') }}
                                </x-primary-button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
