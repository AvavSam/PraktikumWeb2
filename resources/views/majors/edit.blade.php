<x-default-layout title="Edit Major" section_title="Edit Major">
  <form action="{{ route('majors.update', $major->id) }}" method="POST" class="space-y-6 max-w-lg">
    @csrf
    @method('PUT')

    <div>
      <label for="name" class="block text-sm font-semibold text-zinc-600">Major Name</label>
      <input type="text" id="name" name="name" value="{{ old('name', $major->name) }}" required
        class="w-full px-4 py-2 border rounded bg-white shadow-sm focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div class="flex gap-2">
      <button type="submit"
        class="flex items-center gap-2 px-4 py-2 bg-blue-50 border border-blue-500 text-blue-600 rounded hover:bg-blue-100">
        <i class="ph ph-floppy-disk text-blue-600"></i>
        <span>Update</span>
      </button>

      <a href="{{ route('majors.index') }}"
        class="flex items-center gap-2 px-4 py-2 bg-gray-100 border border-gray-400 text-gray-700 rounded hover:bg-gray-200">
        <i class="ph ph-arrow-left text-gray-600"></i>
        <span>Cancel</span>
      </a>
    </div>
  </form>
</x-default-layout>
