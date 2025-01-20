<style>.carousel {
    position: relative;
    overflow: hidden;
    
  }
  
  .carousel-inner {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }
  
  .carousel-item {
    flex: 0 0 100%;
  }
  
  .carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: red;
    cursor: pointer;
    font-size: 24px;
  }
  
  .carousel-btn.prev {
    left: 10px;
  }
  
  .carousel-btn.next {
    right: 10px;
  }</style>