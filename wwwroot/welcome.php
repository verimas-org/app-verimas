              <div class="tm-section-wrap">
                <section id="welcome" class="tm-section">
                    <div class="tm-intro">
                    <h2 class="tm-section-title mb-5 text-uppercase tm-color-white">ようこそ、ヴェリマスへ</h2>
                        <div class="indeximage">
                            <ul>
                                <li class="indeximglistitem"><img src="img/indeximg01.jpg" title="株式会社ヴェリマス"></li>
                                <li class="indeximglistitem"><img src="img/indeximg02.jpg" title="株式会社ヴェリマス"></li>
                                <li class="indeximglistitem"><img src="img/indeximg03.jpg" title="株式会社ヴェリマス"></li>
                                <li class="indeximglistitem"><img src="img/indeximg04.jpg" title="株式会社ヴェリマス"></li>
                            </ul>
                            <span class="indeximgleft">&nbsp;&lt;&nbsp;</span>
                            <span class="indeximgright">&nbsp;&gt;&nbsp;</span>
                            <a class="indeximglislink"></a>
                            <a class="indeximglislink"></a>
                            <a class="indeximglislink"></a>
                            <a class="indeximglislink"></a>
                        </div>
                    </div>
                </section>
            </div>
<script>
        let image_number=4;
        let num = 0;
        let timer;

        function AddTimer(num){
            timer = setInterval(()=>{
                ChangePic(num);
                num++;
                if(num == image_number){
                    num = 0;
                }
            }, 5000);
        }

        function ChangePic(num){
            for(let i of document.querySelectorAll(".indeximglistitem")){
                i.style.opacity = "0";
            }
            toWhite(num);
            document.querySelectorAll(".indeximglistitem")[num].style.opacity = "1";
        }

        function toWhite(num){
            for(let i of document.querySelectorAll(".indeximglislink")){
                i.style.backgroundColor = "grey";
            }
            document.querySelectorAll(".indeximglislink")[num].style.backgroundColor = "white";
        }

        AddTimer(num);

        for(let i=0; i < document.querySelectorAll(".indeximglislink").length; i++){
            // console.log(i);
            document.querySelectorAll(".indeximglislink")[i].addEventListener("click", ()=>{
                num = i;
                ChangePic(num);
            })
        }

        document.querySelector(".indeximgleft").addEventListener("click", ()=>{
            num --;
            if(num == -1){
                num = image_number;
            }
            // console.log(num);
            ChangePic(num);
        })

        document.querySelector(".indeximgright").addEventListener("click", function(){
            num ++;
            if(num == image_number){
                num = 0;
            }
            // console.log(num);
            ChangePic(num);
        })

        /*
        document.querySelector(".indeximage").addEventListener("mouseover", ()=>{
            clearInterval(timer);
        })
        document.querySelector(".indeximage").addEventListener("mouseout", ()=>{
            AddTimer(num);
        })
        */
</script>
