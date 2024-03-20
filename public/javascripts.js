function del(id,name,url,text){
    Swal.fire({
      title: 'Xóa',
      text: "bạn có muốn xóa "+text+ ""+name+"?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Có'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href= ''+url+id+'';
      }
    });
  }

  function logout(url){
    Swal.fire({
      title: 'Bạn Có Muốn Đăng Xuất Không?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Có'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href= ''+url+'';
      }
    });
  }

