function [f] = NewtonsForm(x,y)

n = length(x);

a = Newton(x,y);

syms z;

f(z) = a(1) + z - z;

for i = 2 : n
	g(z) = 1 + z - z;
	for j = 1 : i-1
		g(z) = g(z) * (z-x(j));
	end
	f(z) = f(z) + a(i) * g(z);
end
