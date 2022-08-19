import React from 'react';

function OrderList(props) {
    return (
        <>
            <div className="col-md-8 cart">
                <div className="title">
                    <div className="row">
                        <div className="col">
                            <h4>
                                <b>訂購單</b>
                            </h4>
                        </div>
                        <div className="col align-self-center text-right text-muted">
                            {/* 總商品數 */}
                            {props.cart.reduce((data,next)=> data +  next.count,0)}種商品項目
                        </div>
                    </div>
                </div>
                {props.cart.map((data, index) => {
                    return (
                        <div
                            key={data.id}
                            className="row border-top border-bottom"
                        >
                            <div className="row main align-items-center">
                                <div className="col-2">
                                    <img
                                        alt=""
                                        className="img-fluid"
                                        src={data.src}
                                    />
                                </div>
                                <div className="col">
                                    <div className="row text-muted">
                                        {data.category}
                                    </div>
                                    <div className="row">{data.name}</div>
                                </div>
                                <div className="col">
                                    {/* 減少商品數 */}
                                    <a href="#/" onClick={()=>{
                                       let newCart = props.cart.map((data2, index) => {
                                        if(data2.id==data.id){
                                            return {...data2, count: data2.count-1}
                                        }
                                        return data2
                                        })
                                        props.setCart(newCart)
                                    }}>-</a>
                                    <a href="#/" className="border">
                                        {/* //商品數 */}
                                        {data.count}
                                    </a>
                                    {/* 增加商品數 */}
                                    <a href="#/" onClick={()=>{
                                       let newCart = props.cart.map((data2, index) => {
                                        if(data2.id==data.id){
                                            return {...data2, count: data2.count+1}
                                        }
                                        return data2
                                        })
                                        props.setCart(newCart)
                                    }}>+</a>
                                </div>
                                <div className="col">
                                    {/* 小計 */}
                                    ${data.price * data.count}
                                    {/* 刪除商品 */}
                                    <span className="close" onClick={()=>{
                                       let newCart = props.cart.filter((data2, index) => {
                                            return data2.id !== data.id
                                        })
                                        console.log(newCart)
                                        props.setCart(newCart)
                                    }}>&nbsp;&#10005;</span>
                                </div>
                            </div>
                        </div>
                    );
                })}
                <div className="back-to-shop">
                    <a href="#/">←</a>
                    <span className="text-muted">回到商品頁</span>
                </div>
            </div>
        </>
    );
}

export default OrderList;
