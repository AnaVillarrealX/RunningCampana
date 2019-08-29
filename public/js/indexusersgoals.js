$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

    var links = document.querySelectorAll(".delete")
    for (let link of links) {
        console.log(link)
        link.onclick = function(e) {
            e.preventDefault()
            linkID = link.getAttribute('id')
            linkID = linkID.split('-')
            linkID = linkID[2]

            Swal.fire({
              title: "Estás seguro?",
              text: "Una vez eliminado, no podrás recuperar este registro",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                document.querySelector(`form[id="${linkID}"]`).submit();
                // Swal.fire(
                //   'Deleted!',
                //   'Your file has been deleted.',
                //   'success'
                // );
              }
            });

            swal({
                title: "Estás seguro?",
                text: "Una vez eliminado, no podrás recuperar este registro",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    var form = document.getElementById(linkID)
                    console.log(form)
                    form.submit();
                    swal("El registro ha sido eliminado.", {
                    icon: "success",
                    });
                } else {
                    swal("El registro no se ha eliminado.");
                }
            });
        }
    }




});
