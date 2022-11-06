import './OrderPage.css';
import OrderList from './components/OrderList';
import Summary from './components/Summary';
import { useState } from 'react';

function OrderPage() {
    const [cart, setCart] = useState([
        {
            id: 1,
            category: 'Shirt',
            name: '咖啡色 T-shirt',
            price: 300,
            count: 1,
            src: 'https://i.imgur.com/1GrakTl.jpg',
        },
        {
            id: 2,
            category: 'Shirt',
            name: '白色 T-shirt',
            price: 200,
            count: 1,
            src: 'https://i.imgur.com/ba3tvGm.jpg',
        },
        {
            id: 3,
            category: 'Shirt',
            name: '黑色 T-shirt',
            price: 450,
            count: 1,
            src: 'https://i.imgur.com/pHQ3xT3.jpg',
        },
    ]);
    return (
        <div className="card">
            <div className="row">
                <OrderList cart={cart} setCart={setCart} />
                <Summary cart={cart} />
            </div>
        </div>
    );
}

export default OrderPage;
