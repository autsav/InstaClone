<button onclick="followUser()"   class="bg-blue-500 hover:bg-blue-700  text-white font-bold py-1 px-2  rounded-full">
                   Follow
                        </button>

                        <script>
                              $user_id = <?php echo $user_id; ?>;
                               var user_id = $user_id; 
                             
                            function followUser(){
                                
                                $.ajax({
                                    type:'GET',
                                    url:"/follow/" + user_id,
                                    data: {'submit': true},
                                    success:function(result){
                                        
                                        window.location.reload();
                                    }

                                    });

                            }
                            
                        </script>
                        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                   