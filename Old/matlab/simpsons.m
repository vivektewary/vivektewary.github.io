% Make sure to define the function
% as f = @(x) (x.^2+4.*x+2);
% instead of f = @(x) (x^2+4*x+2)
% because the function will operate 
% on a row vector.

function S = simpsons(f,a,b,n)

h = (b-a)/n; 

xi = a : h : b;

p = sum(f(xi(3:2:end-2)));

q = sum(f(xi(2:2:end)));

S= h/3*(f(xi(1))+2*p+4*q+f(xi(end)));
