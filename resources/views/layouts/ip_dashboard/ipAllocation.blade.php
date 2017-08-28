<!-- /.box-header -->
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Date</th>
            <th>Tool</th>
            <th>Facility Name</th>
            <th>Facility Level</th>
            <th>Quantity</th>
            <th>Allocated By</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @php($totalAllocation = 0)

        @foreach($allocation as $allocationData)
            @foreach($allocationData as $allocate)
            <tr>
                <td>{{$i}}</td>
                <td>{{$allocate[]['date_allocated']}}</td>
                <td>{{$allocate[]['tool_id']}}</td>
                <td></td>
                <td>{{$allocate[]['health_facility_level_id']}}</td>
                <td>{{ $allocate[]['quantity'] }}</td>
                <td>{{$allocate[]['allocated_by']}}</td>
                <td>{{$allocate[]['status']}}</td>
            </tr>
            @php($i++)
            @php($totalAllocation+=$allocate['quantity'])
          @endforeach
        @endforeach
        <tr><td>TOTAL ALLOCATION</td><td></td><td></td><td></td><td>{{$totalAllocation}}</td><td></td><td></td></tr>
        </tbody>
