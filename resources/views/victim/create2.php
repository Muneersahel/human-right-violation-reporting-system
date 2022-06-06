<?php
    class IncidentController extends Controller
    {
        public function toArray()
        {
            return [
                'current_page' => $this->currentPage(),
                'data' => $this->items->toArray(),
                'first_page_url' => $this->url(1),
                'from' => $this->firstItem(),
                'last_page' => $this->lastPage(),
                'last_page_url' => $this->url($this->lastPage()),
                'links' => $this->linkCollection()->toArray(),
                'next_page_url' => $this->nextPageUrl(),
                'path' => $this->path(),
                'per_page' => $this->perPage(),
                'prev_page_url' => $this->previousPageUrl(),
                'to' => $this->lastItem(),
                'total' => $this->total(),
            ];
        }

        public function linkCollection()
        {
            return collect($this->elements())->flatMap(function ($item) {
                if (! is_array($item)) {
                    return [['url' => null, 'label' => '...', 'active' => false]];
                }

                return collect($item)->map(function ($url, $page) {
                    return [
                        'url' => $url,
                        'label' => (string) $page,
                        'active' => $this->currentPage() === $page,
                    ];
                });
            })->prepend([
                'url' => $this->previousPageUrl(),
                'label' => function_exists('__') ? __('pagination.previous') : 'Previous',
                'active' => false,
            ])->push([
                'url' => $this->nextPageUrl(),
                'label' => function_exists('__') ? __('pagination.next') : 'Next',
                'active' => false,
            ]);
        }
    }
    // <script type="text/javascript">
    //         // var x = document.getElementById("nearest_center");
    //         // if (x.value() === null) {
    //         //     alert("Please select the nearest center")
    //         // } else {
    //             // return false;
    //         // }
    
    //         $('#district').change(function(){
    //         var district = $(this).val(); // selected district
    //         // input = document.getElementById("district").value;

    //         // var distname = new array();
    //         // function getJSON() {
    //         var distname = [];
    //             $.ajax({
    //                type:"GET",
    //                url:"{{url('getdistrict')}}",
    //             //    data:distname,
    //                dataType:'JSON',
    //             //    async: false,
    //                success:function(data){
    //                    console.log(data);
    //                 //    window.alert(data);
    //                     // distname.push(data);
    //                     distname = data;
    //                },
    //                error : function(req, err) {
    //                     console.log(err);
    //                 }
    //             });
    //             // console.log(distname);
    //             // return distname;
    //         // }
    //             // console.log(distname.includes(2));
    //             // window.alert(distname.includes(district));
    //             // window.alert(district);
    //             window.alert(distname);
    //         // districts.forEach(element => {
    //             if(distname.includes(district)){
    //         // if(district){
    //             $.ajax({
    //                type:"GET",
    //                url:"{{url('getcenters')}}?district="+district,
    //                success:function(data){
    //                 if(data){
    //                     $("#nearest_center").empty();
    //                     $("#nearest_center").append('<option>Choose nearby lhrc center</option>');
    //                     $.each(data, function(key, values){
    //                         $("#nearest_center").append('<option value="'+key+'">'+values+'</option>');
    //                     });
    //                 }
    //                 else{
    //                     $("#nearest_center").empty();
    //                     $("#nearest_center").append('<option>No lhrc center found</option>');
    //                 }
    //                }
    //             });
    //         }
    //         else{
    //             $("#nearest_center").empty();
    //             $("#nearest_center").append('<option>No lhrc center found</option>');
    //         }
    //         });
            
    //     //    });
    //     </script>
    // $(".undo").on("click", function(e) {
    //     e.preventDefault()
    //     var requested_to = $(this).attr("id")
    //     window.alert(requested_to.val());
    //     $.ajax....
    // )};

        // $('table').on('click', 'button', function(e) {
        //     alert(e.target.id); //dynamicid
        //         $(this).hide();
        //             $('#done').show();

        //             var requested_to = e.target.id;
        //             window.alert(requested_to);

        //         $.ajax({
        //         ....
        //         });
        //     });

        // $("#showId").on('click', (function() {
        //     var clickedId = $(this).val();
        //     // console.log(clickedId);
        //     // $.each(data, function(key, values))
        //     // window.alert(clickedId);

        //     var showId = [];
        //     $.ajax({
        //         type:"GET",
        //         // data: $("#showcenter").serialize(),
        //         url:"{{url('getcenterid')}}",
        //         dataType:'JSON',
        //         async: false,
        //         success:function(data){
        //             console.log(data);
        //             showId = data;

        //             if(showId.includes(clickedId)){
        //             window.alert('Richard PETRO')
        //     }
        //         },
        //         error : function(req, err) {
        //             console.log(err);
        //         }
        //     });

        //     if(showId.includes(clickedId)){
        //         window.alert('Richard PETRO')
        //     }
        // }));

        // function getId(intValue){
        // //   windw.alert(intValue);
        // }
    
    // var showcenter;
    // $("#showclick").click(function(event) {
    // $("#showclick").on('click', (function() {
    // event.preventDefault();

    // var clickedId = $(this).val();
    // var id = $(this).closest("tr").find("button[value]").val();
    // var id = event.target.id;
    // console.log(clickedId);
    // $.each(data, function(key, values))
    // showcenter = $(this).val();
    // window.alert(clickedId)

    // var showcenter = [];
    // $.ajax({
    //     type:"GET",
    //     // data: $("#showcenter").serialize(),
    //     url:"{{url('getcenterid')}}",
    //     dataType:'JSON',
    //     async: false,
    //     success:function(data){
    //         console.log(data);
    //         showcenter = data;
    //     },
    //     error : function(req, err) {
    //         console.log(err);
    //     }
    // });


    //FROM Center Controller
    // $id = Input::get('id');
    $center = Center::where('id', $request->id)->first();
    // $center = Center::where('id', $id)->first();
    // $center = center::find($id);
    // $centerdata = center::get();
    // ddd($center);

    // view()->composer('master', function ($view) {
    //     $u_array = $var;
    //     $name = $u_array->name;
    //     $view->with(compact(name));
    //   });
      
    // $center = DB::table('centers')->where('id', $request->id)->first();
    // return view('center.show', compact('center'));
    return response()->json_encode($center);
    // return view('center.show')->with('center', json_encode($center,true));
    // return view('center.show', compact('center'));

    // $html = view('center.show')->with(compact('center'))->render();
    // return response()->json(['success' => true, 'html' => $html]);


    //from CENTER iNDEX
    // $(document).on('click', 'button[data-id]', function (e) {
    //     var id = $(this).attr('data-id');
    //     // window.alert(data);
    //     $.ajax({
    //         type: "POST",
    //         // url:"{{url('showcenter/{id}')}}",
    //         url: '/showcenter/'+id,
    //         // data: JSON.stringify(id),
    //         data:{id:id}
    //         // data: {'id': id},
    //         // dataType: 'JSON', 
    //         // cache: false,
    //         // contentType: 'application/json; charset=utf-8',
    //         // processData: false,
    //         headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         success: function(data) {
    //             console.log(data);
    //             window.alert("Value added"+ data);
    //             // $('#modal-show').html(data.html);
    //         },
    //         // error: function(jqXHR, textStatus, errorThrown) { 
    //         //     console.log(JSON.stringify(jqXHR));
    //         //     console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    //         // }
    //     });
    // });
?>