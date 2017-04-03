<!-- /.box-header -->
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Names</th>
            <th>Comprehensive Partner</th>
            <th>Funding Agency</th>
            <th>Date Joined</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @foreach($ips as $ip)
            <tr>
                <td>{{$i}}</td>
                <td><a href="{{route('ips.show',$ip['ip_id'])}}">{{$ip['name']}}</a></td>
                <td>{{$ip['comprehensive_partner']}}</td>
                <td>
                    {{$ip['funding_agency']['short_name']}}
                </td>
                <td>{{$ip['created_at']}}</td>
                <td colspan="2">
                    <a href="{{route('ips.show',$ip['ip_id'])}}" class="btn btn-default btn-sm">View Details
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            @php($i++)
        @endforeach
        </tbody>
