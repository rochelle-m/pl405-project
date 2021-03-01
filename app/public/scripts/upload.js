function ValidateSize(file) {

    var FileSize = file.files[0].size / 1024 / 1024; 
        
        if (FileSize > 2) {
            alert('File size exceeds 2 MiB');
            $(file).val(''); //for clearing with Jquery
        }
        else {

        }
    }