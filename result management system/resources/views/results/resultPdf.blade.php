<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
                font-family: Arial, Helvetica, sans-serif;
            }

            body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            }

            /* Style the content */
            .content {
                background-color: #ddd;
                padding: 10px;
                height: 200px; /* Should be removed. Only for demonstration */
            }

            .invoice-details, .invoice-payment-details > li span {
                float: right;text-align: right;
            }
            .text-muted{
                opacity: 0.5;
            }
            .resulttable {
                border-collapse: collapse;
                width: 100%;
            }

            .resulttable th, .resulttable td {
                text-align: left;
                padding: 8px;
            }

            .resulttable tr:nth-child(even) {background-color: #f2f2f2;}
            .m-b-20 {margin-bottom: 20px !important;}
            .invoice-details > span {
                float: right;
                text-align: right;
            }

        </style>
    </head>
    <body>
        <div style="text-align:center;">
            <h3 style="text-transform: uppercase;"> semester Result</h3>
        </div>
        <span style="float: right;">Date: <span>{{$date}}</span></span>
            
        
        <div class=" m-b-20"> 
            <span><b>Student Details:</b></span>
                <li>Name: <span>{{$id->name}}</span></li>
                <li>Email: <span>{{$id->email}}</span></li>
                <li>Matric no: <span>{{$id->id_no}}</span></li>
                <li>Department: <span>{{$id->department->name}}</span></li>
            </ul>
        </div><br><br>
        <div class="table-responsive">
            <table class="resulttable">
                <tr>
                    <th>Course code</th>
                    <th>Title</th>
                    <th>score</th>
                    <th>Grade</th>
                </tr>
                @foreach($id->result as $key => $result)
                    @if($result->semester == '1')
                    <tr>
                        <td>{{$result->course->course_code}}</td>
                        <td class="hidden-xs">{{$result->course->title}}</td>
                        <td>{{$result->score}}</td>
                        <td>
                        @if($result->score >= 70)
                            <span style="font-weight:bold;">A</span>
                            @elseif($result->score >= 60 && $result->score <= 69)
                            <span style="font-weight:bold;">B</span>
                            @elseif($result->score >= 50 && $result->score <= 59)
                            <span style="font-weight:bold;">C</span>
                            @elseif($result->score >= 40 && $result->score <= 49)
                            <span style="font-weight:bold;">D</span>
                            @elseif($result->score >= 30 && $result->score <= 39)
                            <span style="font-weight:bold;">E</span>
                            @elseif($result->score >= 0 && $result->score <= 29)
                            <span style="font-weight:bold;">F</span>
                            @endif 
                        </td>
                    </tr>
                    @endif

                    @if($result->semester == '2')
                    <tr>
                        <td>{{$result->course->course_code}}</td>
                        <td class="hidden-xs">{{$result->course->title}}</td>
                        <td>{{$result->score}}</td>
                        <td>
                        @if($result->score >= 70)
                            <span style="font-weight:bold;">A</span>
                            @elseif($result->score >= 60 && $result->score <= 69)
                            <span style="font-weight:bold;">B</span>
                            @elseif($result->score >= 50 && $result->score <= 59)
                            <span style="font-weight:bold;">C</span>
                            @elseif($result->score >= 40 && $result->score <= 49)
                            <span style="font-weight:bold;">D</span>
                            @elseif($result->score >= 30 && $result->score <= 39)
                            <span style="font-weight:bold;">E</span>
                            @elseif($result->score >= 0 && $result->score <= 29)
                            <span style="font-weight:bold;">F</span>
                            @endif 
                        </td>
                    </tr>
                    @endif
                @endforeach
            </table>
        </div><br>
        <div style="float:right">
            <table class="mytable">
                <tr>
                    <th colspan="2" align="center">Total Score</th>
                </tr>
                <tr>
                    <th>Total Points: &nbsp; &nbsp;</th>
                    <td class="text-right">{{$id->result->sum('point')}}</td>
                </tr>
                <tr>
                    <th>WA: &nbsp; &nbsp;</th>
                    <td class="text-right text-primary"><h5>{{round($id->result->sum('point')/$std_courses_unit,2)}}</h5></td>
                </tr>
            </table>
        </div>
    </body>
</html>