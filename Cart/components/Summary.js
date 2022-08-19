import React from 'react';

function Summary(props) {
    return (
        <>
            <div className="col-md-4 summary">
                <div>
                    <h5>
                        <b>付款摘要</b>
                    </h5>
                </div>
                <hr />
                <div className="row">
                    <div className="col col-style">
                        {/* 總商品數 */}
                        共{' '}
                        {props.cart.reduce(
                            (data, next) => data + next.count,
                            0
                        )}{' '}
                        項目
                    </div>
                </div>
                <div className="row row-style">
                    <div className="col">總價</div>
                    <div className="col text-right">
                        $
                        {/* 總金額 */}
                        {props.cart.reduce((data, next) => {
                            return data + next.count * next.price;
                        }, 0)}
                    </div>
                </div>
                <button className="btn">前往付款</button>
            </div>
        </>
    );
}

export default Summary;
