<x-default-layout title="Create Major" section_title="Add New Major">
  <div class="flex items-center gap-2 mb-6">
    <a href="{{ route('majors.index') }}"
      class="bg-zinc-50 text-zinc-600 border border-zinc-400 px-3 py-2 flex items-center gap-2 hover:bg-zinc-100">
      <i class="ph ph-arrow-left block text-zinc-600"></i>
      <span>Back</span>
    </a>
  </div>

  <form action="{{ route('majors.store') }}" method="POST"
    class="space-y-6 bg-white p-6 rounded shadow max-w-xl border border-zinc-200">
    @csrf

    <div class="space-y-1">
      <label for="code" class="block text-sm font-medium text-zinc-700">Major Code</label>
      <input type="text" id="code" name="code" required
        class="w-full px-4 py-2 border border-zinc-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>

    <div class="space-y-1">
      <label for="name" class="block text-sm font-medium text-zinc-700">Major Name</label>
      <input type="text" id="name" name="name" required
        class="w-full px-4 py-2 border border-zinc-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>
    <div class="space-y-1">
      <label for="description" class="block text-sm font-medium text-zinc-700">Major Description</label>
      <input type="text" id="description" name="description" required
        class="w-full px-4 py-2 border border-zinc-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>

    <button type="submit"
      class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow-md font-medium transition duration-300">
      Save Major
    </button>

  </form>
</x-default-layout>
