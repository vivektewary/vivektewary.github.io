function [root,iter] = newton_raphson(f,t,tol)
n=0;    
out = sym(f);
def = diff(out);
while abs(subs(out, 'x', t))>tol
    dxi = subs(def, 'x', t);
    fxi = subs(out, 'x', t);
    t = t - (fxi/dxi);
    n = n + 1;
end
if n > 0
	root = eval(t);
else
	root = t;
end
iter = n;