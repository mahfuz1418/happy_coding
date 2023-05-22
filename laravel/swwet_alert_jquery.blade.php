
<!-- Go to this url to get url Sweet Alert  -->

https://www.jsdelivr.com/package/npm/sweetalert2



<!-- Or Direct copy from here  -->

<!-- Copy this in head  -->
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">
<!-- Copy this in Script section  -->
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>



<!-- Some example with jQuery code  -->

<!-- For delete message HTML & jQuery code  -->
<button value="{{ route('delete.employee', ['id' => $data->id]) }}" class="btn btn-danger delete">Delete</button>
    <script>
            $(document).ready(function(){
                $('.delete').click(function(){
                    Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.assign($(this).val())
                                // Swal.fire(
                                // 'Deleted!',
                                // 'Your file has been deleted.',
                                // 'success'
                                // )    
                        )
                    }
                    })
                })
            })

    </script>




<!-- For show success session in laravel  -->

    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            })
        </script>
    @endif




