<thead class="text-primary">
    <tr>
        <th>Full name</th>
        <th>Short name</th>
        <th>Price</th>
        <th>Currency Code</th>
        <th class="text-center">Action</th>
    </tr>
</thead>
<tbody>
    @forelse ($courses as $course)
    <tr>
        <td>{{ $course->full_name }}</td>
        <td>{{ $course->short_name }}</td>
        <td>{{ $course->price }}</td>
        <td>{{ $course->currency_code }}</td>
        <td class="text-center">
            <a href="{{ route('admin.courses.edit', ['course' => $course->id]) }}"
                class="text-secondary font-weight-bold" title="Edit Course">
                <i class="fa fa-edit"></i>
            </a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="text-center">No records</td>
    </tr>
    @endforelse
</tbody>
