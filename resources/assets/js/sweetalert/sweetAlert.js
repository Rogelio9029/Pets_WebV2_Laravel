export const swalMixin = (status, title) => {
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
    });  
    Toast.fire({
        icon: status,
        title: title
    });
}

export const swalDialog = (text) => {
    return new Promise((resolve, reject) => {
        Swal.fire({
            title: 'Estas seguro?',
            text: text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => { 
            if (result.isConfirmed)
                resolve(true);
            // reject(false)
        });
    });
}

export const swalBasic = (state, message, status) => {
    Swal.fire(
        state,
        message,
        status
    )
}