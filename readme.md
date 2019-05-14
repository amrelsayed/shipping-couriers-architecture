### Shipping couriers architecture
I've implemented an Adapter pattern to solve this problem. So I created a demo for two different couriers api's I implemented it locale with simple structure and some little differences.

So, whenever I want to add new Courier, I should add a new Adapter that implements our Shipment Interface to adapt it with our client. That all what we should do to add a new Courier.

#### Setup Instructions
- `git clone https://github.com/amrelsayed/shipping-couriers-architecture.git`
- `composer install`

**To run unit tests**
`vendor/bin/phpunit`