<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$title}}
        </h2><br>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
          <div class="grid grid-cols-12">
            <div class="col-span-6 p-4">
              <a href="{{route('pegawai.create')}}"><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
              hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah<button></a>
              <a href=""><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
              hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Publish<button></a>
              <a href=""><button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-purple-200
              hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Delete<button></a>
            </div>
            <div class="col-span-6 p-4">
              <input type="text" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 rounded-none rounded-1-md sm:text-sm border-grany-300">
              <button class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 text-blue-600 hover:text-white hover:bg-blue-600">Cari</button>
            </div>
           </div>
          </div>
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
              <tr>
                  <th>Tandai</th>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          <?php $no=1; ?>
            @foreach ($pegawai as $item)
              <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>{{$no}}</td>
                    <td>{{$item->NIP}}</td>
                    <td>{{$item->Nama}}</td>
                    <td></td>
                    <td>

                    </td>
              </tr>
                <?php $no++; ?>
            @endforeach
          </tbody>
        </table>
        </div>
    </div>
</x-template-layout>