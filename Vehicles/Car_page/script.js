

const products = [
    { name: 'Brand - Toyota', image: '/FreshFocus/Vehicles/Car_page/Car_img/allion_ogp_01.jpg',model:'Model - Allion',year:'Year - 2014',price:'Price - 5000$',text:'Toyota Allion 2014' },
    { name: 'Brand - Toyota', image: "/FreshFocus/Vehicles/Car_page/Car_img/axio.jpg",model:'Model - Axio',year:'Year - 2014',price:'Price - 4000$',text:'Toyota Axio 2014' },
    { name: 'Brand - Suzuki', image:"/FreshFocus/Vehicles/Car_page/Car_img/alto-1.jpg",model:'Model - Alto',year:'Year - 2014',price:'Price - 2000$',text:'Suzuki Alto 2014'},
  
  ]; 
  const container = document.getElementById('imageID');
  const previewImg = document.getElementById('preview');
  const Brand = document.getElementById('Brand');
  const Model = document.getElementById('Model');
  const Year= document.getElementById('Year');
  const Price= document.getElementById('Price');
  const image_textID = document.getElementById('image_textID');
  const infoID = document.getElementById('infoID');
  
  products.forEach(product => {
    
    const imageElement = document.createElement('img');
    imageElement.src = product.image;
    imageElement.alt = product.name;
    const paragraph = document.createElement('p');
    paragraph.textContent = product.text;
    
    imageElement.addEventListener('click', () => {
      (previewImg.src = product.image);
      Brand.innerText = product.name
      Model.innerText = product.model
      Year.innerText  = product.year
      Price.innerText = product.price
      infoID.innerText= paragraph.textContent
    
    });

    
    container.appendChild(imageElement);
    container.appendChild(paragraph);
    
    
  });
