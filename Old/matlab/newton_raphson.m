% The program takes a function f and
% its derivative df as input
function [root,iter] = newton_raphson(f,df,t,tol)
n=0;
while abs(f(t))>tol
    t = t - (f(t)/df(t));
    n = n + 1;
end
root = t;
iter = n;
