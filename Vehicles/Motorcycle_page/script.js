
const products = [
    { name: 'Brand - TVS', image: '/FreshFocus/Vehicles/Motorcycle_page/Bike_img/Tvs1.jpg',model:'Model - Metro',year:'Year - 2014',price:'Price - 900$',text:'TVS metro 2014' },
    
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
