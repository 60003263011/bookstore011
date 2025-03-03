@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <?=link_to('books/create',$title = 'เพิ่มข้อมูล',['class'=>'btn btn-primary'],$secure = null); ?>
            <div class="card">

                <div class="card-header h3">
                    แสดงข้อมูลหนังสือ จำนวนทั้งหมด {{ $books->total()  }} เล่ม

                </div>

                <div class="card-body">

                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th>
                            <th>ชื่อหนังสือ</th>
                            <th>ราคา</th>
                            <th>หมวดหนังสือ</th>
                            <th>รูป</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name  }}</td>
                            <td>{{  number_format($book->price,2)}}</td>

                            <td>{{$book->typebooks->name  }}</td>
                            <td><a href="{{asset('images/'.$book->image)  }}"><img src="{{ asset('images/'.$book->image) }}" style="width:100px" data-lity></a></td>

                            <td>
                                <a href="{{url('/books/'.$book->id.'/edit')}}">แก้ไข </a>
                            <td>
                                <?=Form::open(array('url'=>'books/' .$book->id, 'method'=>'delete','onsubmit' =>'return confirm("แน่ใจว่าต้องการลบข้อมูล?");')) ?>
                                <button type="submit" class="btn btn danger">ลบ</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </table>
                    <br>
                    {!! $books->render() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
@if(session()->has('status'))
<script>
    swal({
        title: "<?php echo session()->get('status'); ?>",
        text: "",
        timer: 2000,
        type: 'success',
        showConfirmButton: false
    });
</script>
@endif
@endsection
