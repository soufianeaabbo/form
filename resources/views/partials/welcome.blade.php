<section class="container">
    <table class="w-100">
        <thead>
            <tr class="fs-2 text-center">
                <th>#</th>
                <th>Name</th>
                <th>Firstname</th>
                <th>Birth Date</th>
                <th>Gender</th>
            </tr>
        </thead>
        @foreach ($members as $member)
            <tbody
                class="{{ $member->gender == 'homme'? 'bg-danger text-light fs-3 text-center': 'bg-primary text-light fs-3 text-center' }}">
                <tr>
                    <th>{{ $member->id }}</th>
                    <th>{{ $member->name }}</th>
                    <th>{{ $member->firstname }}</th>
                    <th>{{ $member->birthDate }}</th>
                    <th>{{ $member->gender }}</th>
                </tr>
            </tbody>
        @endforeach
    </table>
</section>
