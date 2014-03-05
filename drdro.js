var x = null;
$(function(){
                     
        $(".pull,.vertical,.horizontal,.pull_pert,.slant").draggable({
        
            helper: 'clone',
            cursor: 'move', 
            tolerance: 'fit',
            revert: 'invalid'
                });
    
    
        $("#droppable").droppable({
            accept: '.pull,.horizontal,.vertical,.pull_pert,.slant',
          
            drop: function (e, ui) {
                if ($(ui.draggable)[0].id != "") {
                   
                    x = ui.helper.clone();
                    ui.helper.remove();
                    
                    
                   x.resizable({
                    handles:'n,e'
                    
                    }).draggable({
                        helper: 'original',
                        cursor:'move',
                        tolerance: 'fit',
                        drop: function (event, ui) {
                            $(ui.draggable).remove();
                        }
                    });
                  
     
                    
                    
                    x.addClass('remove');
                    var el = $("<span><a href='Javascript:void(0)' class=\"xicon delete\" title=\"Remove\"></a></span>");
                    $(el).insertAfter($(x.find('img')));
                    x.appendTo('#droppable');
                  
                    $('.delete').parent().parent('span').dblclick(function () {
                        $(this).remove();
                    });
                }
            }
                                });
                          
            $("#trash").droppable({
            drop: function (event, ui) {
                $(ui.draggable).remove();
            },
            accept: '.remove'
        });
                  });