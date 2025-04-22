<x-layout>
    <h1>Edit Ninja</h1>

    <form action="{{ route('ninja.update', $ninja->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Ninja Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $ninja->name) }}" required>

        <label for="lastname">Ninja Lastname:</label>
        <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $ninja->lastname) }}" required>

        <label for="gym_id">Gym:</label>
        <select name="gym_id" id="gym_id" required>
            <option value="" disabled>Select a gym</option>
            @foreach ($gyms as $gym)
                <option value="{{ $gym->id }}" {{ $gym->id == old('gym_id', $ninja->gym_id) ? 'selected' : '' }}>
                    {{ $gym->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update Ninja</button>

        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>
