$(document).ready(function() {
    // mengambil respon dari user (click) dari id #addShape
    $('#addShape').click(function() {
        // mengambil value dari masing-masing shape control
        let shapeType = $('#shapeType').val();
        let shapeColor = $('#shapeColor').val();
        let shapeSize = $('#shapeSize').val();
        
        // menambahkan div baru yang berupa shape dengan atribut value inputan shape control
        let shape = $('<div></div>').addClass('shape').css({
            'background-color': shapeColor,
            'width': shapeSize + 'px',
            'height': shapeSize + 'px'
        });

        // jika value shapeType berupa 'circle', maka akan menambahkan class 
        if (shapeType === 'circle') {
            shape.addClass('circle');
        }

        // setelah class shape dibentuk sesuai keinginan user maka akan ditambahkan (append)
        // ke dalam class shapeContainer
        $('.shapeContainer').append(shape);
    });

    // mengambil respon dari user (click) dari id #removeShape
    $('#removeShape').click(function() {
        $('.shapeContainer .shape').last().remove();
    });
});
