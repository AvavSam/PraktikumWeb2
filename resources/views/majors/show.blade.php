<x-default-layout title="Major Detail" section_title="Major Detail">
  <div class="max-w-lg space-y-4">
    <div>
      <label class="block text-sm font-semibold text-zinc-600">Major Name</label>
      <div class="mt-1 p-2 border rounded bg-zinc-100 text-zinc-800">
        {{ $major->name }}
      </div>
    </div>

    <a href="{{ route('majors.index') }}"
      class="inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
      Back to List
    </a>
  </div>
</x-default-layout>
