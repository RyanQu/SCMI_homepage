window.onload=function()
    {
        var menu=document.getElementById('notice-tit'),
        ps=menu.getElementsByTagName('h5'),
        uls=menu.getElementsByTagName('ul');
        for(var i in ps)
        {
            ps[i].id=i;
            ps[i].onclick=function()
            {
                var u=uls[this.id];
                if(u.style.display!='none')
                {
                    u.style.display='none';
                }
                else
                {
                    u.style.display='block';
                }   
            }
        }
        var titles=$('#notice-tit').find('li'),
        divs=$('#notice-con').find('section');
        for(var i=0;i<titles.length;i++)
        {
            titles[i].id=i;
            titles[i].onmouseover=function(){
                for(var j=0;j<titles.length;j++)
                {
                    titles[j].className='';
                    divs[j].style.display='none';
                }
                this.className='active';
                divs[this.id].style.display='block';
            }
        }   
  }