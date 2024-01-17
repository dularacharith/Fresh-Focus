
const products = [
    { name: '', image: '',location:'',area:'',price:''},
    
  ]; 
  const container = document.getElementById('imageID');
  const previewImg = document.getElementById('preview');
  const Discription = document.getElementById('Discription');
  const Location_item = document.getElementById('Location_item');
  const Area = document.getElementById('Area');
  const Price= document.getElementById('Price');
  const image_textID = document.getElementById('image_textID');
  const infoID = document.getElementById('infoID');
  
  products.forEach(product => {
    
    const imageElement = document.createElement('img');
    imageElement.src = product.image;
    imageElement.alt = product.name;
    const paragraph = document.createElement('p');
    paragraph.textContent = product.name;
  
  
    imageElement.addEventListener('click', () => {
      (previewImg.src = product.image);
      Discription.innerText = product.name
      Location_item.innerText = product.location
      Area.innerText  = product.area
      Price.innerText = product.price
      infoID.innerText= paragraph.textContent
    
    });

    
    container.appendChild(imageElement);
    container.appendChild(paragraph);
    
  });
